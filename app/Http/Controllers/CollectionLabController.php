<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class CollectionLabController extends Controller
{
    //
    public function index(){
        // 1. Creating Collection!
        $numbers = collect([1,2,3,4,5]); // collect([])

        // 2. Accessing Items
        $firstItem = $numbers->first();
        $lastItem= $numbers->last();
        // - Chunk - Split the collection into chunks?
        $chunks = $numbers->chunk(3); // create 3 chunks item
        # group by
        

        // - Map - Transform each item;
        $multiplied = $numbers->map(function($item){
            return $item*2;
        });

        // Filter - get number that greater than 3
        $filtered = $numbers->filter(function($item){
            return $item > 3;
        });

        // Reduce - sum all numbers
        $sum = $numbers->reduce(function($carry,$item){
            return $carry + $item;

        });

        //  Pluck -  Extract specific values from array of associative arrays;
        $people = collect([
            ['name'=>'John','age'=>30],
            ['name'=>'Jane','age'=>25],
            ['name'=>'Doe','age'=>22],
        ]);
        $groupByAge = $people->groupBy('age');
        $names = $people->pluck('name');

        // Flatten
        $nested = collect([[1,2,3],[4,5],[6]]);
        $flattened = $nested->flatten();

    

        // 3. Adding Items
        $numbers->push(6);  // Adds an item at the end
        $numbers->prepend(0);   // Adds an item at the beginning

        return response()->json([
            'chunks'=>$chunks,
            'groupByAge'=>$groupByAge,
            'flattened'=> $flattened,
            'final_collection / original'=>$numbers->all(),
            'first_item'=>"$firstItem",
            'last_item'=>"$lastItem",

            'mapped'=>$multiplied->all(),
            'filtered'=>$filtered->values(),
            'sum'=>$sum,
            'names'=>$names->all()

        ]);

    }
}
