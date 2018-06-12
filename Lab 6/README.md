# Lab 06 : XML & DTD

## Lab Tasks
1. Define a DTD, students.dtd, for documents that list all courses offered, and then the courses taken by each student. The DTD should allow each registered student to take 0 or more courses. Phone numbers are optional. Also, only degree students have a degree attribute. A course may be taken by students whose status is degree, special or both. A student may be taking a course for which he/she can’t get credit (e.g., a special student taking a course for which only degree students get credit).
2. Provide an XML document, students.xml, which captures the information given in the tables above and is consistent with students.dtd.
3. Define a DTD that validates following XML document:
```xml
<?xml version="1.0" encoding="UTF‐8"?>
<student>
	<firstName>Luca</firstName>
	<lastName>Rossi</lastName>
	<id>281283</id>
	<plan>
		<courses year="3">
			<course>
				<name> Programmazione Orientata agli Oggetti </name>
				<shortName>POO</shortName>
				<record>
					<grade>30</grade>
					<date>13/06/11</date>
				</record>
			</course>
			<course>
				<name>Analisi e progettazione del software</name>
				<shortName>APS</shortName>
			</course>
		</courses>
	</plan>
</student>
```
4. Define a DTD that validates following XML document:
```xml
<?xml version="1.0" encoding="UTF‐8"?>
<email>
	<from> luca.rossi.917@gmail.com </from>
	<to> atzeni@dia.uniroma3.it </to>
	<content>
		Dear <person> Paolo </person>,
		here are some very hard exercises for the upcoming assignment of <course> web
		engineering </course>:
		<exercises>
			<exercise>
				<topic> DTD </topic>
				<description> From Instance to DTD </description>
			</exercise>
			<exercise>
				<topic> XPath </topic>
				<description> Find students with average grade better than 26
				</description>
			</exercise>
		</exercises>
		Best Regards,
		<person> Luca </person>
	</content>
</email>
```