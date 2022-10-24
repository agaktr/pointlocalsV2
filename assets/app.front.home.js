// import './js/geolocation'
import { GPS } from './js/geolocation';

GPS.initialize({
    env : 'dev',
    prompt : true
})
/**
 * The main function that starts all the execution
 * when we have all needed info
 */
function doTheInit() {
    /**
     * Wait until GPS inspection is finished
     */
    console.log(GPS)
    if (GPS.isFinished === false) {//we want it to match
        setTimeout(doTheInit,1);//wait 1 millisecnds then recheck
        return false;
    }
    //
    // /**
    //  * Initialize materialize stuff
    //  */
    // M.AutoInit()
}
/**
 * Start execution
 */
doTheInit();