

    $("#submit").click(function () {

        var city = $("#city").val();
        var token = creds.token;

        if(city != "") {
            
            $.ajax({
                url: "http://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric" +
                        "&APPID=" + token,
                type: "GET",
                dateType: "jsonp",
                success: function (data) {
                    var widget = show(data);
                    $(".show").html(widget);
                    $("#city").val("");
                    console.log(data);
                }
            });
        }else {
            $("#error").html("Inscivez le nom d'une ville ou d'un pays !");
            
            
        }
    });

    function show(data){
        
        
        return "<h2>La méteo pour : " + data.name + ", " + data.sys.country + "</h2>" +
        "<h3>Méteo: <img src='http://openweathermap.org/img/wn/" +data.weather[0].icon + ".png'>" + data.weather[0].main + "</h3>" +
                "<h3>Temperature: " + data.main.temp + " &deg;C</h3>";
                
    }





