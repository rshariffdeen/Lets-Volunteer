window.fbAsyncInit = function() {
    FB.init({appId: '878518675507348', status: true, cookie: true, xfbml: true});
};
(function() {
    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);

    FB.Event.subscribe('auth.login', function(response) {
        login();
    });
    FB.Event.subscribe('auth.logout', function(response) {
        logout();
    });
    FB.getLoginStatus(function(response) {
        if (response.session) {
            greet();
        }
    });
}());

function login(){
    FB.api('/me', function(response) {
        alert('You have successfully logged in, '+response.name+"!");
    });
}
function logout(){
    alert('You have successfully logged out!');
}
function greet(){
    FB.api('/me', function(response) {
        alert('Welcome, '+response.name+"!");
    });
}
