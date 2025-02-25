document.getElementById('open_btn').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('open-sidebar');
    document.querySelector('main').style.paddingLeft = sidebar.classList.contains('open-sidebar') ? '200px' : '102px';
});
