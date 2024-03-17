window.addEventListener('load', init);

const url = `http://localhost/PRG03-eindopdracht/webservice/index.php`;
let list;


function init() {
    list = document.getElementById(`movie-list`);
    list.addEventListener(`click`, movieClickHandler);

    getMovieData();
}

function getMovieData() {
    ajaxRequest(url, movieSuccessHandler);
}

function movieSuccessHandler(data) {
    for (let movieData of data) {
        const cards = document.createElement('div');
        cards.dataset.name = movieData.id;
        cards.classList.add(`cards`);

        const imgMovie = movieData.image;
        const img = document.createElement("img")
        img.src = imgMovie;
        img.classList.add("picture");
        img.id = `img-${movieData.id}`
        cards.appendChild(img);

        const rightSide = document.createElement(`div`);
        rightSide.classList.add(`right-side`);
        cards.appendChild(rightSide)

        const nameMovieData = movieData.name;
        const nameMovie = document.createElement(`h2`)
        nameMovie.textContent = nameMovieData;
        rightSide.appendChild(nameMovie);

        const releaseDateData = movieData.date;
        const releaseDateInput = document.createElement(`p`)
        releaseDateInput.textContent = releaseDateData;
        rightSide.appendChild(releaseDateInput);

        const detailsButtonRight= document.createElement(`button`);
        detailsButtonRight.classList.add(`button`);
        detailsButtonRight.textContent = `< Show details`;
        rightSide.appendChild(detailsButtonRight);

        list.appendChild(cards);

        console.log(cards);
        console.log(movieData);console.log(detailsButtonRight)
    }
}

function movieClickHandler(e) {
    const clickedElement = e.target;

    if (clickedElement.tagName !== 'BUTTON') return;

    const card = clickedElement.closest('.cards');

    if (!card) return;

    const movieId = card.dataset.name;
    const descriptionDetail = card.querySelector('h2');
    const genresDetail = card.querySelector('p');
    const buttonDetail = card.querySelector('.button');

    if (!descriptionDetail || !genresDetail || !buttonDetail) return;

    if (buttonDetail.textContent === `< Show details`) {
        ajaxRequest(`http://localhost/PRG03-eindopdracht/webservice/index.php?id=${movieId}`, function(data) {
            const movieDetails = data;
            if (movieDetails) {
                const nameMovie = descriptionDetail.textContent;
                const releaseDate = genresDetail.textContent;

                descriptionDetail.textContent = movieDetails.description;
                descriptionDetail.classList.add(`descriptionAndGenres`);

                genresDetail.textContent = `genres: ${movieDetails.genres.join(', ')}`;
                genresDetail.classList.add(`descriptionAndGenres`);

                buttonDetail.textContent = `> Go back`;

                card.dataset.originalName = nameMovie;
                card.dataset.originalReleaseDate = releaseDate;
            }
        });
    } else {
        descriptionDetail.textContent = card.dataset.originalName;
        genresDetail.textContent = card.dataset.originalReleaseDate;

        descriptionDetail.classList.remove(`descriptionAndGenres`);
        genresDetail.classList.remove(`descriptionAndGenres`);

        buttonDetail.textContent = `< Show details`;
    }
}

function ajaxErrorHandler(data) {
    console.log(data);
}

function ajaxRequest(url, successHandler) {
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler);
}