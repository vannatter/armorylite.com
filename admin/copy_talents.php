<?

/**************************************

INSERT INTO talents 	(	
			Build, 
			Class_ID, 
			`Row`, 
			`Col`, 
			Panel, 
			Talent_Name, 
			Max_Points, 
			Spell_URL_1, 
			Spell_URL_2, 
			Spell_URL_3, 
			Spell_URL_4, 
			Spell_URL_5
			)
SELECT
		1,
		Class_ID, 
		`Row`, 
		`Col`, 
		Panel, 
		Talent_Name, 
		Max_Points, 
		Spell_URL_1, 
		Spell_URL_2, 
		Spell_URL_3, 
		Spell_URL_4, 
		Spell_URL_5
FROM
	talents
WHERE
	Build = 0

***************************************/

?>