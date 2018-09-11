<?php

class MetricsView {

	private $metrics;

    /**
     * Creates a class for viewing software metrics.
     *
     * @param SoftwareMetrics $metrics
     */
	public function __construct(SoftwareMetrics $metrics) {
		$this->metrics = $metrics;
	}

    /**
     * A function for presenting the software metrics.
     *
     * @return void
     */
	public function show() {
		echo $this->toHTML();
	}

	private function toHTML() : string {

		$if = $this->metrics->getIfStatements();
        $characters = $this->metrics->getCharacters();
        $lines = $this->metrics->getLines();

		$ret = "
<div>
	<p>Number of if-statements: $if </p>
    <p>Number of characters: $characters </p>
    <p>Lines of code: $lines </p>
	
</div>	

";
		return $ret;
	}
}
