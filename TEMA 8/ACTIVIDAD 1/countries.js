function showCountries(){
    const request = new XMLHttpRequest();
    request.open('GET', 'https://restcountries.com/v3.1/all', true);
    request.onload = function (){
        
        if(request.status == 200){
            let countries = JSON.parse(this.response);
            
            countries.forEach(country => {
                let divisorName = document.createElement('div');
                divisorName.innerHTML = country.name.common + " - Capital: " + country.capital;
                
                let link = document.createElement('a');
                link.href = 'https://es.wikipedia.org/wiki/'+country.name.common;
                link.target = '_blank'
                
                let divisorFlag = document.createElement('img');
                divisorFlag.src = country.flags.png;
                link.appendChild(divisorFlag);
                
                let container = document.getElementById('container');
                divisorName.className = "eachName";
                divisorFlag.className = "eachFlag";
                container.appendChild(divisorName);
                container.appendChild(link);
            });
        }
    }
    request.send();
}