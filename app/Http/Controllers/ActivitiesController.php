<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Item;

class ActivitiesController extends Controller
{
    public function store(Request $request)
    {
    	$activity_name = $request->input('activity_name');

    	$data = array(
    		'activity_name' => $activity_name
    	);

    	$activity = Activity::create($data);

    	if ($activity) {
    		return response()->json([
                'data' => [
                    'type' => 'activities',
                    'message' => 'Success',
                    'id' => $activity->id,
                    'attributes' => $activity
                ]
            ], 201);
    	} else {
    		return response()->json([
                'type' => 'activities',
                'message' => 'Fail'
            ], 400);
    	}
    }

    public function storeLists(Request $request, $activity_id)
    {
    	$item_name = $request->input('item_name');

    	$item = Item::create([
    		'item_name' => $item_name,
    		'activity_id' => $activity_id,
    		'status' => 0
    	]);

    	if ($item) {
    		return response()->json([
                'data' => [
                    'type' => 'activity items',
                    'message' => 'Success',
                    'id' => $item->id,
                    'attributes' => $item
                ]
            ], 201);
    	} else {
    		return response()->json([
                'type' => 'activity_items',
                'message' => 'Fail'
            ], 400);
    	}
    }

    public function show()
    {
    	$activities = Activity::with('items')->get();

    	return response()->json([
    		'data' => $activities
    	], 200);
    }
}
