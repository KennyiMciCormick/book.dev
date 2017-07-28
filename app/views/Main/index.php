<div class="container">
    <button class="btn btn-default" id="send">AJAX</button>
    <?php if(!empty($admin) && $admin){ ?>
        <a href="/admin/logout" class="btn btn-default" >Вийти</a>
    <?php } ?>

    <ul>

    </ul>
</div>

<script>
    $('#send').click(function () {
        $.ajax({
            type: "POST",
            url: '/main/test-ajax',
            data: {id: 2},
            success: function (response) {
                console.log(response);
            },
            eroor: function () {
                alert('ERROR');
            }
        });
    })
</script>