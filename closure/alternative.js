function Foo() {

	var self = this;
	
	// private variable
	var greeting = "Hello";
		
	// constructor
	return {
		bar: function() {
			console.log("bar");
		},
		yo: "yo"
	};

};

var foo = new Foo();
foo.bar();
console.log(foo.yo);