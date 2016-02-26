function Foo(name) {

	var self = this;
	
	// private variable
	var greeting = "Hello";
	
	// private method
	var world = function() {
		console.log("world");
	}

	// public variable
	this.yo = "yo";

	// public method
	this.bar = function() {
		console.log("bar");
		world();
	}
	
	// constructor
	return (function() {
		console.log(greeting+" "+name);
		return self;
	})();

};

var foo = new Foo("Jimmy");
foo.bar();
console.log(foo.yo);