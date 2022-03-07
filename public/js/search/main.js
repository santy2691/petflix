const searchIcon = document.getElementsByClassName('toggleSearch')[0];

const toggleSearch = () => {
  Array.from(document.getElementsByClassName('searchMenu')).forEach(el => {
    el.classList.toggle('collapse')
  });
  document.getElementsByTagName('aside')[0].classList.toggle('collapse');
  document.getElementsByClassName('mainMovies')[0].classList.toggle('expanded');
}
searchIcon.onclick = toggleSearch;
