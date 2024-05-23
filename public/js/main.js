document.getElementById('comment-btn').addEventListener('click', function() {
    const commentInput = document.getElementById('comment-input');
    commentInput.scrollIntoView({ behavior: 'smooth' });
    commentInput.focus();
});

