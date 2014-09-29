function addBook(link)
{
   var data=$("#book-form").serialize();
        $.ajax({
            type: 'POST',
            url: link,
            data:data,
            success:function(data){
                if(data){
                    $("#addBook").dialog("close");
                    $("#addSuccess").dialog("open");
                    $("#BookForm_title").val("");
                    $("#BookForm_comment").val("");
                    $("#BookForm_publisher").val("");
                    $("#BookForm_realese_date").val("");
                    $("#BookForm_author").val("");
                    var item = $(data).hide();
                    $("#books").prepend(item);
                    item.slideDown();
                }
            },
            error: function(data) { // if error occured
                alert("Error occured.please try again");
                alert(data);
        },
        dataType:'html'
  });
}
function deleteBook(link,pk)
{       
        $.ajax({
            type: 'POST',
            url: link,
            data: {pk: pk},
            success:function(data){
                $("#deleteSuccess").dialog("open");
                $("#deleteSuccessText").text(data);
                $("#" + pk).slideUp();
            },
            error: function(data) { // if error occured
                alert("Error occured.please try again");
                alert(data);
        },
        dataType:'html'
  });
}