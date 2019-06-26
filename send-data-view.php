Route::get('/', function () {
	$name = 'Md Mirazul Islam';
  $age = 24;
    //return view('welcome', compact('name', 'age')); // using compact
    //return view('welcome')->with('name', $name); // using with
    //return view('welcome', ['name' => $name, 'age' => $age]); // using array
});
