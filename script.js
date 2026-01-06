const searchInput = document.getElementById("searchInput");
const movieList = document.getElementById("movieList");
const movies = Array.from(movieList.getElementsByTagName("li"));

searchInput.addEventListener("input", function () {
  const filterText = searchInput.value.toLowerCase();

  movies.forEach(movie => {
    const movieName = movie.textContent.toLowerCase();
    if (movieName.includes(filterText)) {
      movie.style.display = "";
    } else {
      movie.style.display = "none";
    }
  });
});
