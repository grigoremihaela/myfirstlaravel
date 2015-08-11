var Counter = React.createClass({
        getInitialState: function() {
          return {
            count: 0
          };
        },
        decrement: function() {
          this.setState({ count: this.state.count -1});
        },
        increment: function() {
          this.setState({ count: this.state.count +1});
        },
        render: function() {
          return (
            <div id="counter">
              <h1>Counter: {this.state.count}</h1>
              <button onClick={this.decrement}>-1</button>
              <button onClick={this.increment}>+1</button>
            </div>
          );
        }
      });
      React.render(<Counter />, document.getElementById('counter'));    

