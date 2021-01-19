<!--$sql= "SELECT `name`,`image`,`about`,`link` FROM movies WHERE name='$search'";-->
<!--<-->
<!--$conn=mysqli_connect("localhost","thejayka_user","fake1234","thejayka_jaykay");-->
<!--    if(isset($_GET['search'])){-->

<!--    $search = $_GET['value'];-->

<!--    $search_query = "select * from movies where name like '%$search%'";-->
<!--$conn=mysqli_connect("localhost","thejayka_user","fake1234","thejayka_jaykay");-->
<!--    $run_query = mysql_query($search_query);-->

<!--    while ($search_row = mysql_fetch_array($run_query)){-->

<!--    $name = $search_row['name'];-->
<!--    $image = $search_row['image'];-->
<!--    $about = substr($search_row['about'],0,150);-->
<!--    $link = $search_row['link'];-->
<!--    }-->
<!--    }-->
<!--    ?>-->

<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Live MySQL Database Search</title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Movies/WebSeries" />
        <div class="result"></div>
    </div>
</body>
</html>

