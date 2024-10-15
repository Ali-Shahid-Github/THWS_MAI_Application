using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bakery_Management_System
{
    public partial class Menu_form : Form
    {


        public Menu_form()
        {
            InitializeComponent();
        }



        private void addEmployeeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Add_Employee_Form form = new Add_Employee_Form())
            {
                form.ShowDialog();
            }
        }

        private void addCustomerToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Add_Customer form1 = new Add_Customer())
            {
                form1.ShowDialog();
                if (form1.is_valid)
                {
                    SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                    con.Open();

                    SqlCommand command = new SqlCommand("INSERT INTO CUSTOMER VALUES(@a,@b,@c)", con);
                    command.Parameters.AddWithValue("@a", form1.cus_name.Text.ToString());
                    command.Parameters.AddWithValue("@b", form1.cus_location.Text.ToString());
                    command.Parameters.AddWithValue("@c", form1.cus_contact.Text.ToString());

                    command.ExecuteNonQuery();
                    con.Close();

                    MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }

            }

        }

        private void viewCustomerToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (View_Customer form1 = new View_Customer())
            {
                form1.ShowDialog();
            }
        }

        private void deleteCustomerToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Delete_Customer form1 = new Delete_Customer())
            {
                form1.ShowDialog();

            }
        }

        private void viewEmployeeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (View_Employee form1 = new View_Employee())
            {
                form1.ShowDialog();
            }

        }

        private void deleteEmployeeToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Delete_Employee form1 = new Delete_Employee())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem13_Click(object sender, EventArgs e)
        {
            using (Add_Manufacturer form1 = new Add_Manufacturer())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem14_Click(object sender, EventArgs e)
        {
            using (View_Manufacturer form1 = new View_Manufacturer())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem9_Click(object sender, EventArgs e)
        {
            using (Add_Distributer form1 = new Add_Distributer())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem10_Click(object sender, EventArgs e)
        {
            using (View_Distributer form1 = new View_Distributer())
            {
                form1.ShowDialog();
            }
        }

        private void addProductToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Add_Products form1 = new Add_Products())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem2_Click(object sender, EventArgs e)
        {
            using (View_Products form1 = new View_Products())
            {
                form1.ShowDialog();
            }
        }

      
        private void addPurchasingToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Add_Purchasing form1 = new Add_Purchasing())
            {
                form1.ShowDialog();
            }
        }

        private void addSupplierToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (Add_Supplier form1 = new Add_Supplier())
            {
                form1.ShowDialog();
            }
        }

        private void viewSupplierToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (View_Supplier form1 = new View_Supplier())
            {
                form1.ShowDialog();
            }
        }

        private void vIewPurchasingToolStripMenuItem_Click(object sender, EventArgs e)
        {
            using (View_Purchasing form1 = new View_Purchasing())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem4_Click(object sender, EventArgs e)
        {
            using (Add_Invoice form1 = new Add_Invoice())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem5_Click(object sender, EventArgs e)
        {
            using (View_Invoice form1 = new View_Invoice())
            {
                form1.ShowDialog();
            }
        }

        private void toolStripMenuItem6_Click(object sender, EventArgs e)
        {
            using (View_Sale form1 = new View_Sale())
            {
                form1.ShowDialog();
            }
        }
    }
}
