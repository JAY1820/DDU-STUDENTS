using System;
using System.Collections.Generic;
using System.Drawing;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace LAB10
{
    public partial class Que1 : System.Web.UI.Page
    {
        string[] fontFamilies = new string[]
       {
            "Arial",
            "Helvetica",
            "Times New Roman",
            "Courier New",
            "Georgia",
            "Verdana",
            "Trebuchet MS",
            "Impact",
            "Comic Sans MS",
            "Palatino Linotype"
       };
        Random random = new Random();
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        private Color GetRandomColor()
        {

            byte a = (byte)random.Next(256); // Alpha channel (0-255)
            byte r = (byte)random.Next(256); // Red channel (0-255)
            byte g = (byte)random.Next(256); // Green channel (0-255)
            byte b = (byte)random.Next(256); // Blue channel (0-255)

            return Color.FromArgb(a, r, g, b);
        }
        protected void Timer1_Tick(object sender, EventArgs e)
        {
            string fonts = fontFamilies[random.Next(0, 10)];
            Label1.Text = fonts;
            Label1.BackColor = GetRandomColor();
            Label1.Font.Name = fonts;
        }
    }
}