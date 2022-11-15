function submitFeedback(user_id,product_id,fullname,email,phone_number,note) {
    note=document.getElementById("note").value;
    $.ajax({
        url:"../Controls/feedback_ctrl/ctrl_addFeedback.php",
        method:
    })
}