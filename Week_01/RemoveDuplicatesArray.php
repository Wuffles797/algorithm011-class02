class RemoveDuplicatesArray {
    /**
    * @param Integer[] $nums
    * @return Integer
    */
    function removeDuplicates(&$nums) {
        $len = count($nums);
        if ($len <= 1) {
            return $len;
        }
        for ($i = $len - 1; $i >= 0; $i--) {
            if($i > 0){
                $j = $i - 1;
                if($nums[$i] === $nums[$j]){
                    unset($nums[$i]);
                }
            }
        }
        return count($nums);
    }
}