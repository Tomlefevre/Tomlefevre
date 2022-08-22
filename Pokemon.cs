using System;
using System.Collections.Generic;
using System.Text;

namespace Pokedex
{
    public class name
    {
        public string en { get; set; }
        public string fr { get; set; }
    }

    public class genus
    {
        public string en { get; set; }
        public string fr { get; set; }
    }

    public class description
    {
        public string en { get; set; }
        public string fr { get; set; }
    }

    public class stats
    {
        public string name { get; set; }
        public int stat { get; set; }
    }

    public class pokemon
    {
        public int id { get; set; }
        public name name { get; set; }
        public List<string> types { get; set; }
        public int height { get; set; }
        public int weight { get; set; }
        public genus genus { get; set; }
        public description description { get; set; }
        public List<stats> stats { get; set; }
        public int lastEdit { get; set; }
    }
}
