// import './js/geolocation'
import { gps } from './js/geolocation';
/**
 * The main function that starts all the execution
 * when we have all needed info
 */
function doTheInit() {
    /**
     * Wait until GPS inspection is finished
     */
    console.log(gps)
    // if (A.aptoGPS.isFinished() === false) {//we want it to match
    //     setTimeout(doTheInit,1);//wait 1 millisecnds then recheck
    //     return false;
    // }
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