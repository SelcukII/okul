using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        

        private void Form1_Load(object sender, EventArgs e)
        {
            label3.Text = "";
            label5.Text = "";
            label6.Text = "";
            label4.Visible = false;
        }
        private void button1_Click(object sender, EventArgs e)
        {
            double ortalama, vize, final;

            try
            {
                vize = Convert.ToDouble(numericUpDown1.Value);
                final = Convert.ToDouble(numericUpDown2.Value);
                ortalama = vize * 0.4 + final * 0.6;
                label6.Text = ortalama.ToString();
                label4.Visible = true;
                

                if (ortalama >= 50 && final >=50)
                {
                    label3.Text = "Geçti";
                    label3.ForeColor = Color.Green;
                }

                else
                {
                    label3.Text = "Kaldı";
                    label3.ForeColor = Color.Red;
                }
                if (ortalama >= 90 && final >= 100)
                {

                    label5.Text = "AA";
                }
                else if (ortalama >= 85 && final >= 89)
                {

                    label5.Text = "BA";
                }
                else if (ortalama >= 80 && final >= 84)
                {

                    label5.Text = "BB";
                }
                else if (ortalama >= 75 && final >= 79)
                {

                    label5.Text = "CB";
                }
                else if (ortalama >= 70 && final >= 74)
                {

                    label5.Text = "CC";
                }
                else if (ortalama >= 65 && final >= 69)
                {

                    label5.Text = "DC";
                }
                else if (ortalama >= 60 && final >= 64)
                {

                    label5.Text = "DD";
                }
                else if (ortalama >= 50 && final >= 59)
                {

                    label5.Text = "FD";
                }

            }
            catch (Exception ex)
            {
                
            }

        }
    }
}
