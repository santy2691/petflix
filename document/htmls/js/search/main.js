const searchIcon = document.getElementById('toggleSearch');

const toggleSearch = () => {
  document.getElementById('searchMenu').classList.toggle('collapse');
}
searchIcon.onclick = toggleSearch;