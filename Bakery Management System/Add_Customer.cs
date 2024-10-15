using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bakery_Management_System
{
    public partial class Add_Customer : Form
    {
        public Add_Customer()
        {
            InitializeComponent();
        }

        public bool is_valid = false;
        private void add_cus_Click(object sender, EventArgs e)
        {
            if (cus_name.Text.ToString() != "")
                is_valid = true;
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }
}
