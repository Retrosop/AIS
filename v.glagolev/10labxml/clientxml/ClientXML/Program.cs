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

			XmlDocument xDoc = new XmlDocument();
			xDoc.Load("Person.xml");
			XmlElement? xRoot = xDoc.DocumentElement;
			if (xRoot != null )
			{
				foreach (XmlElement xnode in xRoot)
				{
					XmlNode? attr = xnode.Attributes.GetNamedItem("name");
                    Console.WriteLine(attr?.Value);
                }
			}



		}
	}
}
