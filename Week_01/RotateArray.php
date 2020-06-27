class RotateArray {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        for ($i = 0; $i < $k; $i++){
            array_unshift($nums, array_pop($nums));
        }
    }
}