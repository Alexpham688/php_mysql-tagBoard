$(document).ready(function() {
  $('.submit').on('click', function() {
    var name = $('.name').val();
    var tag = $('.tagInput').val();
    var date = getDate();
    var dataString = 'name= ' + name + '&tag=' + tag +'&date=' + date;

    // validation
    if(name === "") {
      alert('Fill In Name: ');
    } else if(tag === ""){
       alert("Type In Message");
     } else {
        $.ajax({
            type: "POST",
            url: "../tagBoard/tagBoard.php",
            data: dataString,
            cache: false,
            success: function(html) {
                $('.tags ul').append(html);
                $('.tagInput').val("");
                $('.name').val('');
                }
              });
            }
        return false;
    });
});

  function getDate() {
    var date;
    date = new Date();

    date = date.getUTCFullYear() +'_' +
      ('00' + (date.getUTCMonth() + 1)).slice(-2) + '_' +
      ('00' + date.getUTCDate()).slice(-2) + ' ' +
      ('00' + date.getUTCHours()).slice(-2) + ':' +
      ('00' + date.getUTCMinutes()).slice(-2) + ':' +
      ('00' + date.getUTCSeconds()).slice(-2);
    return date;

  }
