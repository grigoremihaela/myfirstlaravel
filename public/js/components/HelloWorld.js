var HelloWorld = React.createClass({
        render: function() {
          return (
          	<div id="hello">
              <h3>Hello World!</h3> 
            </div>           
          );
        }
      });
      React.render(<HelloWorld />, document.getElementById('hello'));    