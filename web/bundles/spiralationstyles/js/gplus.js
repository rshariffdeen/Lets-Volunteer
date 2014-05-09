/**
 * Created by Danula on 5/8/14.
 */
(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/client:plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();


profile: function(){
    var user = gapi.client.plus.people.get( {'userId' : 'me'} );   user.execute(function(profile)){
        $('#profile').append(
            $('<p><img src=\"' + profile.image.url + '\"></p>')      );
        $('#profile').append(
            $('<p>Hello ' + profile.displayName + '</p>')
        );
    });
}


people: function() {
    var request = gapi.client.plus.people.list({
        'userId': 'me',
        'collection': 'visible'
    });
    request.execute(function(people) {
        for (var personIndex in people.items) {
            person = people.items[personIndex];
            $('#visiblePeople').append('<img src="' +
                person.image.url + '">');
        }
    });
}