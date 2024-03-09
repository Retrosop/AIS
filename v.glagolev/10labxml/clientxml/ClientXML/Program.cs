using System.Xml;

namespace ClientXML
{
	class MyProgram
	{
		static void Main()
		{
			Person tom = new Person("Tom", 25, "Micsoft");
			List<Person> list = new List<Person>();
			list.Add(new Person("Ivan", 34, "Google"));

			XmlDocument xmlDoc = new XmlDocument();
			xmlDoc.Load("Person.xml");
			XmlNodeList personNodes = xmlDoc.SelectNodes("//person");
			foreach (XmlNode personNode in personNodes)
			{
				string name = personNode.Attributes["name"].Value;
				string company = personNode.SelectSingleNode("company").InnerText;
				int age = int.Parse(personNode.SelectSingleNode("age").InnerText);

				Console.WriteLine($"Name: {name}, Company: {company}, Age: {age}");
			}



		}
	}
}
