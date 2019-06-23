    var url = "http://127.0.0.1:8000/api/msgs";
    var xhr = $.get(url);
    xhr.done(function(data) {
    setTimeout(function(){
    $(".msgloading").hide();
      var totalImgFound = data.length;
      if(data.length > 0){
      for(var i = 0; i < data.length; i++){
        $(".chat_container .msgs .before").before('<li><div class="avatarmsg" style="display: none;"></div><p class="contents"><span class="name">' + data[i].name + '</span> <br> ' + data[i].msg  + '</p></li>');
      } 
      }
      else{
        $(".chat_container .msgs .before").before("<p>Não encontrei nada </p>");
      }
    }, 3000);
     });