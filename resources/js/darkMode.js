if (localStorage.getItem('theme') === null) {
    document.documentElement.classList.add('dark');
    localStorage.setItem('theme', 'dark');
    console.log('Dark Mode enabled');
}