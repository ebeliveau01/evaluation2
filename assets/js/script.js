document.addEventListener('DOMContentLoaded', function() {
    const postComment = document.querySelectorAll('.card');
    const postAll = document.querySelectorAll('.card');
    const boutonAuthentification = document.getElementById('bonhomme');
    const formAuth = document.getElementById('popupauthentification');
    const devAll = document.getElementById('developperreduire');
    const fermerAuth = document.getElementById('btnfermer');

    fermerAuth.onclick = fermerAuthFunc;

    boutonAuthentification.onclick = authButton;

    postComment.forEach(element => {
        element.onclick = postComWrapEvent;
    });

    devAll.onclick = devAllCom;

    function devAllCom() {
        devAll.textContent = devAll.textContent === "Tout développer" ? "Tout réduire" : "Tout développer";

        postAll.forEach(element => {
            postCommentId = element.querySelector('.collapse');

            if (devAll.textContent === "Tout réduire" || postCommentId.style.display === '') {
                postCommentId.style.display = 'block';
            } 
            else {
                postCommentId.style.display = 'none';
            }
        });
    }
    
    function authButton() {
        changeDisplay(formAuth);
    };

    function fermerAuthFunc() {
        formAuth.style.display = 'none';
    }

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