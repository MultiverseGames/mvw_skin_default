function cdtime(container, targetdate, nowdate){
    if (!document.getElementById || !document.getElementById(container)) return
    this.container=document.getElementById(container)
    this.currentTime=new Date(nowdate*1000)
    this.targetdate=new Date(targetdate*1000)
    this.timesup=false
    this.updateTime()
}

cdtime.prototype.updateTime=function(){
    var thisobj=this
    this.currentTime.setSeconds(this.currentTime.getSeconds()+1)
    setTimeout(function(){thisobj.updateTime()}, 1000) //update time every second
}

cdtime.prototype.displaycountdown=function(baseunit, functionref){
    this.baseunit=baseunit
    this.formatresults=functionref
    this.showresults()
}

cdtime.prototype.showresults=function(){
    var thisobj=this

    var timediff=(this.targetdate-this.currentTime)/1000 //difference btw target date and current date, in seconds
    if (timediff<0){ //if time is up
        this.timesup=true
        this.container.innerHTML=this.formatresults()
        return
    }
    var oneMinute=60 //minute unit in seconds
    var oneHour=60*60 //hour unit in seconds
    var oneDay=60*60*24 //day unit in seconds
    var dayfield=Math.floor(timediff/oneDay)
    var hourfield=Math.floor((timediff-dayfield*oneDay)/oneHour)
    var minutefield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour)/oneMinute)
    var secondfield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour-minutefield*oneMinute))
    if (this.baseunit=="hours"){ //if base unit is hours, set "hourfield" to be topmost level
        hourfield=dayfield*24+hourfield
        dayfield="n/a"
    }else if (this.baseunit=="minutes"){ //if base unit is minutes, set "minutefield" to be topmost level
        minutefield=dayfield*24*60+hourfield*60+minutefield
        dayfield=hourfield="n/a"
    }else if (this.baseunit=="seconds"){ //if base unit is seconds, set "secondfield" to be topmost level
        var secondfield=timediff
        dayfield=hourfield=minutefield="n/a"
    }
    this.container.innerHTML=this.formatresults(dayfield, hourfield, minutefield, secondfield)
    setTimeout(function(){thisobj.showresults()}, 1000) //update results every second
}



function formatresults(){
    if (this.timesup==false){//if target date/time not yet met
        if(this.baseunit=="hours"){
            if(arguments[1] > 0){
                var displaystring=arguments[1]+" <sub>hr</sub> "+arguments[2]+" <sub>min</sub> "+arguments[3]+" <sub>sec</sub>"
            }else if(arguments[2] > 0){
                var displaystring=arguments[2]+" <sub>min</sub> "+arguments[3]+" <sub>sec</sub>"
            }else{
                var displaystring=arguments[3]+" <sub>sec</sub>"
            }
        }else if(this.baseunit=="days"){
            if(arguments[0] > 0){
                var displaystring=arguments[0]+" <sub>day</sub> "+arguments[1]+" <sub>hr</sub> "+arguments[2]+" <sub>min</sub> "+arguments[3]+" <sup>sec</sup>"
            }else if(arguments[1] > 0){
                var displaystring=arguments[1]+" <sub>hr</sub> "+arguments[2]+" <sub>min</sub> "+arguments[3]+" <sub>sec</sub>"
            }else if(arguments[2] > 0){
                var displaystring=arguments[2]+" <sub>min</sub> "+arguments[3]+" <sub>sec</sub>"
            }else{
                var displaystring=arguments[3]+" <sub>sec</sub>"
            }
        }else{
            if(arguments[2] > 0){
                var displaystring=arguments[2]+" <sub>min</sub> "+arguments[3]+" <sub>sec</sub>"
            }else{
                var displaystring=arguments[3]+" <sub>sec</sub>"
            }
        }
    }else{
        var displaystring="Updating.."
    }
    return displaystring
}