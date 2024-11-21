<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('form.commentForm').on('submit', function(event) {
        $('#inputs input.required').each(function() {
            $(this).rules("add",{
                required: true
            });
        });
        if($('form.commentForm').validate().form()) {
            console.log("valid");
        } else {
            event.preventDefault();
            console.log("not valid");
        }
    });
    $('form.commentForm').validate();
});
</script>

<form class="commentForm" method="get" action="" style="float:left">
    <div>
         <div class="form-copy-wrap">
            <p>
                <label for="aname">Name</label>
                <input name="name[]" minlength="5" type="text" required/>
            </p>
            <p>
                <label for="aemail">Email</label>
                <input name="email[]" type="email" required/>
            </p>
            <p>
                <label for="aage">Age</label>
                <input name="age[]" type="number" required/>
            </p>
         </div>
        <input class="submit" type="submit" value="Submit" />
    </div>
</form>