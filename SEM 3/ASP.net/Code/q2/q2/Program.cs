using System.Xml.Xsl;

class Program
{
    static void Main()
    {
        string xmlFilePath = "Student2.xml";
        string xsltFilePath = @"D:\MCA\SEM 3\ASP.net\LAB\q2\q2\student.xslt";
        string outputFilePath = @"D:\MCA\SEM 3\ASP.net\LAB\q2\q2\output.html";

        XslCompiledTransform xslt = new XslCompiledTransform();
        xslt.Load(xsltFilePath);
        xslt.Transform(xmlFilePath, outputFilePath);

        System.Console.WriteLine("Transformation complete. Output written to output.html.");
        System.Console.ReadKey();
    }
}
