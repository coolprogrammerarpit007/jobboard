`use strict`;

const searchInput = document.getElementById(`search-input`);
const searchBtn = document.getElementById(`search-btn`);
const listingDetail = document.querySelectorAll(`.listing-detail`);


searchBtn.addEventListener(`click`,(e)=>{
    e.preventDefault();
    console.log(listingDetail);
    const searchInputValue = searchInput.value;
    console.log(searchInputValue);
    const jobTags = document.querySelectorAll(`.job-tags`);
    if(jobTags){
        jobTags.forEach(tag=>{
            if(tag.textContent.trim().toLowerCase().includes(searchInputValue.toLowerCase())){
                tag.parentElement.style.display = `flex`;
            }else{
                tag.parentElement.style.display = `hidden`;
            }
        })
    }
})