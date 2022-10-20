let names = [
    "Andaman and Nicobar",
    "Punjab",
    "Rajasthan",
    "Kerala",
    "Maharashtra",
    "Uttarakhand",
    "Himachal Pradesh",
    "Gujarat",
    "NEIL ISLAND",
    "CELLULAR JAIL,PORT BLAIR",
    "CORBYN'S COVE,PORT BLAIR",
    "SAMUDRIKA NAVAL MARINE MUSEUM,PORT BLAIR",
    "HAVELOCK ISLAND(SWARAJ DWEEP)",
    "Baratang Island",
    "GOLDEN TEMPLE",
    "WAGAH BORDER",
    "JALLIANWALA BAGH",
    "BHAKRA NANGAL DAM",
    "SUKHNA LAKE",
    "SHAHPUR KANDI FORT",
    "Jaipur",
    "Amber Palace",
    "Jantar Mantar",
    "Hawa Mahal",
    "Albert Hall Museum(Central Museum)",
    "Jal Mahal",
    "Chittorgarh Fort",
    "The Ajmer Sharif Dargah",
    "Jaisalmer fort",
    "Munnar",
    "Alleppey",
    "Wayanad",
    "Kochi",
    "Thekkady",
    "Varkala",
    "Poovar",
    "Kovalam",
    "Sabarimala",
    "Kumarakom",
    "Kollam",
    "Trivandrum",
    "Mumbai",
    "Ajanta And Ellora Caves",
    "Panchgani",
    "Mahabaleshwar",
    "Lonavala",
    "Alibag",
    "Shirdi",
    "Nashik",
    "Pune",
    "Kashid",
    "Aurangabad",
    "Kolhapur",
    "Rishikesh",
    "Nainital",
    "Mussorie",
    "Badrinath",
    "Haridwar",
    "Jim Corbett National Park",
    "Kedarnath",
    "Auli",
    "Dehradun",
    "Almora",
    "Dhanaulti",
    "Ranikhet",
    "Lansdowne",
    "Bhimtal",
    "Joshimath",
    "Mukteshwar",
    "Rudra Prayag",
    "Uttarkashi",
    "DevPrayag",
    "Manali",
    "Shimla",
    "Mcleodganj",
    "Dalhousie",
    "Spiti Valley",
    "Kasol",
    "Dharamshala",
    "Tirthan Valley",
    "Kasauli",
    "Bir Billing",
    "Kinnaur",
    "Kufri",
    "Chamba",
    "Chail",
    "Mandi",
    "Kullu",
    "Kaza",
    "Palampur",
    "Nahan",
    "Kangra",
    "Narkanda",
    "Manikaran Sahib",
    "Solang Valley",
    "Beas Kund Trek",
    "Kheerganga Trek",
    "Ahmedabad",
    "Kutch",
    "Gir National Park",
    "Somnath",
    "Porbandar",
    "Vadodara",
    "Dwarka",
    "Junagadh",
    "Gandhinagar",
    "Diu",
    "Bhuj",
    "Surat",
    "Delhi",
    "India Gate",
    "Qutub Minar",
    "Humayun Tomb",
    "Akshardham Temple",
    "Lotus Temple",
    "Red Fort",
    "Museum Of Illusions",
    "Agrasen Ki Baoli",
    "Garden Of Five Senses",
    "Jama Masjid",
    "Gurudwara Bangla Sahib",
    "Rail Museum"
];


let sortedNames = names.sort();
// console.log(sortedNames)

let input = document.getElementById("search-bar");

input.addEventListener("keyup", () => {
    //loop through above array
    //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
    removeElements();
    for(let i of sortedNames) {
        if(i.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != "") {
            let listItem = document.createElement("li");
            listItem.classList.add("list-items");
            listItem.style.cursor = "pointer";
            listItem.setAttribute("onclick", "displayNames('" + i + "')");
            //Display matched part in bold
            let word = "<b>" + i.substring(0, input.value.length) + "</b>";
            word += i.substring(input.value.length);
            //display the value in array
            listItem.innerHTML = word;
            document.querySelector(".list").appendChild(listItem);
        }
    }
});
function displayNames(value) {
    input.value = value;
    removeElements();
}
function removeElements() {
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
      item.remove();
    });
}