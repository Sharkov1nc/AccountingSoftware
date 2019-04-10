var App = (function () {
	'use strict';

  App.textEditors = function( ){

    //Summernote
    $('#editor1').summernote({
      height: 400
    });
    
  };

  return App;
})(App || {});
