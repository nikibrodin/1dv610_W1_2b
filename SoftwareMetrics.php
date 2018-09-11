<?php

class SoftwareMetrics {

	private $phpCode;
	private $ifStatements;
	private $characters;
	private $lines;
	
	/**
	 * Returns the number of if-statements in a code.
	 *
	 * @return integer Number of if-statements.
	 */
	public function getIfStatements() : int {
		return substr_count($this->phpCode, "if (");
	}

	/**
	 * Returns the number of characters in a code.
	 *
	 * @return integer Number of characters.
	 */
	public function getCharacters() : int {
		return strlen($this->phpCode);
	}

	/**
	 * Returns the number of lines in a code.
	 *
	 * @return integer Number of lines.
	 */
	public function getLines () : int {
		return substr_count($this->phpCode, "\n") + 1;
	}

	/**
	 * Creates a class for software metrics
	 *
	 * @param string $phpCode
	 */
	public function __construct(string $phpCode) {
		$this->phpCode = $phpCode;
	}

}