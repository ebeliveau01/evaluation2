document.addEventListener('DOMContentLoaded', function() {
    const postComment = document.querySelectorAll('.card');
    const boutonAuthentification = document.getElementById('bonhomme');
    const formAuth = document.getElementById('popupauthentification');

    boutonAuthentification.onclick = authButton;

    postComment.forEach(element => {
        element.onclick = postComWrapEvent;
    });

    function authButton() {
        changeDisplay(formAuth);
    };

    function changeDisplay(elementDisplay) {
        if (elementDisplay.style.display === 'none' || elementDisplay.style.display === '') {
            elementDisplay.style.display = 'block';
        } else {
            elementDisplay.style.display = 'none';
        }
    };

    function postComWrapEvent() {
        var postCommentId = this.querySelector('.collapse');
        if (postCommentId.style.display === 'none' || postCommentId.style.display === '') {
            postCommentId.style.display = 'block';
        } else {
            postCommentId.style.display = 'none';
        }
    };
});