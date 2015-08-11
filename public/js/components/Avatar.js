var Avatar = React.createClass({
        getDefaultProps: function() {
          return {
            path: 'http://lorempixel.com/45/45/people/?'
          };
        },
        render: function() {
          return (
            <div id="avatar">
              <a href={this.props.path}>
              <img src={this.props.path} />
              </a>
            </div>
          );
        }
      });
      React.render(<Avatar />, document.getElementById('avatar')); 


//                        path: 'http://lorempixel.com/128/128/people/?54065'
//   path: '{{ $user->image }}'
//   path: '{{ $user->avatar }}'
//   path: 'http://bit.ly/1NABbkf'

//   path="http://bit.ly/19FPeaP" 


