define ['jquery'], () ->
  (id,success,fail) ->
    $.ajax {
      url : '/api/items/' + id ,
      type : 'GET',
      success: (data) ->
        $('#result').html("Success:"+ JSON.stringify(data))
        if (success)
          success(data)

      error: (data) ->
        alert('ERROR!' + data)
        if (fail)
          fail(data)
    }

# return callAjax01
