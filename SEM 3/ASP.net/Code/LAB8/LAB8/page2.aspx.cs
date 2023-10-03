using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Data;
using System.Xml;

namespace LAB8
{
    public partial class page2 : System.Web.UI.Page
    {

        protected void Page_Load(object sender, EventArgs e)
        {
            string connectionString = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\iamja\OneDrive\Documents\LAB8.mdf;Integrated Security=True;Connect Timeout=30";
            try
            {
                using (SqlConnection connection = new SqlConnection(connectionString))
                {
                    connection.Open();

                    // SQL query to retrieve records from the Student table and return XML data
                    string query = "SELECT * FROM Student FOR XML AUTO, ELEMENTS";

                    using (SqlCommand command = new SqlCommand(query, connection))
                    {
                        using (XmlReader reader = command.ExecuteXmlReader())
                        {
                            // Create an XmlWriter to write to a file
                            XmlWriterSettings settings = new XmlWriterSettings
                            {
                                Indent = true
                            };

                            using (XmlWriter xmlWriter = XmlWriter.Create("student.xml", settings))
                            {
                                // Write the XML content to the file
                                xmlWriter.WriteStartDocument();
                                xmlWriter.WriteStartElement("Students");

                                while (reader.Read())
                                {
                                    if (reader.NodeType == XmlNodeType.Element && reader.Name == "row")
                                    {
                                        xmlWriter.WriteNode(reader, true);
                                    }
                                }

                                xmlWriter.WriteEndElement();
                                xmlWriter.WriteEndDocument();
                            }
                        }
                    }
                }

                // Display the content of the XML file on the console
                string xmlFilePath = "student.xml";
                string xmlContent = System.IO.File.ReadAllText(xmlFilePath);
                Console.WriteLine(xmlContent);
            }
            catch (Exception ex)
            {
                Console.WriteLine("An error occurred: " + ex.Message);
            }
        }
    }
}