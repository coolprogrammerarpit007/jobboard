`use strict`;

const searchInput = document.getElementById(`search-input`);
const searchBtn = document.getElementById(`search-btn`);


searchBtn.addEventListener(`click`,(e)=>{
    e.preventDefault();
    const searchInputValue = searchInput.value;
    console.log(searchInputValue);
    const jobTags = document.querySelectorAll(`.job-tags`);
    if(jobTags){
        console.log(jobTags[0].textContent);
    }
})