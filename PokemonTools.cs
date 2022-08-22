using System;
using System.Collections.Generic;
using System.Text;

namespace Pokedex
{
    class PokemonTools
    {
        static private List<string> types; //Liste des types présents dans l'API à l'instant t

        public static void PrintAll(List<List<pokemon>> genList) //Affichage de tout le pokédex avec les ID, noms et types de chaque pokémon
        {
            foreach (List<pokemon> list in genList)
            {
                foreach (pokemon poke in list)
                {
                    Console.WriteLine("__________________");
                    Console.WriteLine($"ID : {poke.id} \nNom : {poke.name.fr}\nType : {poke.types[0]}");
                }
            }
        }

        public static string TypeChoice() //Choix de l'utilisateur pour le type de pokémon, choisi
        {
            do
            {
                Console.Write("Liste des types :\n");
                int i = 1;
                foreach (string type in types)
                {
                    Console.Write($"{i} - {type}\n");
                    i++;
                }
                string choice = Console.ReadLine();
                foreach (string type in types)
                    switch (choice)
                    {
                        case "1": return types[0];
                        case "2": return types[1];
                        case "3": return types[2];
                        case "4": return types[3];
                        case "5": return types[4];
                        case "6": return types[5];
                        case "7": return types[6];
                        case "8": return types[7];
                        case "9": return types[8];
                        case "10": return types[9];
                        case "11": return types[10];
                        case "12": return types[11];
                        case "13": return types[12];
                        case "14": return types[13];
                        case "15": return types[14];
                        case "16": return types[15];
                        case "17": return types[16];
                        case "18": return types[17];
                        default: break;
                    }
                Console.Clear();
            } while (true);
        }

        public static void PrintByType(List<List<pokemon>> genList, String type) //Affichage de tous les pokémons d'un type choisi
        {
            Console.Clear();
            int nbPokeType = 0;
            Console.WriteLine($"Affichage des Pokémons de type {type}");
            foreach (List<pokemon> list in genList)
            {
                foreach (pokemon poke in list)
                {
                    if (poke.types.Contains(type))
                    {
                        Console.WriteLine("__________________");
                        Console.WriteLine($"ID : {poke.id} \nNom : {poke.name.fr}");
                        nbPokeType++;
                    }
                }
            }
        }

        public static void PrintByGen(List<pokemon> pokeList) //Affichage de chaque pokémon d'une unqiue génération
        {
            foreach (pokemon poke in pokeList)
            {
                Console.WriteLine("__________________");
                Console.WriteLine($"ID : {poke.id} \nNom : {poke.name.fr}");
            }
        }

        public static void WeightByType(List<List<pokemon>> genList, String type) //Calcul de la moyenne de poids des pokémons d'un unique type
        {
            Console.Clear();
            Console.Write($"Poids moyen des Pokémons de type {type} : ");
            int totalWeight = 0;
            int nbPoke = 0;
            foreach (List<pokemon> gen in genList)
            {
                foreach (pokemon poke in gen)
                {
                    if (poke.types.Contains(type))
                    {
                        totalWeight += poke.weight;
                        nbPoke++;
                    }
                }
            }
            Console.Write($"{totalWeight / nbPoke} kg");
        }

        public static void PrintOneTypeByGen(List<List<pokemon>> genList) //Affichage d'un seul pokémon de chaque type pour chaque génération
        {
            List<string> types = new List<string>();
            int i = 1;
            foreach (List<pokemon> gen in genList)
            {
                Console.WriteLine($"________Génération {i}________");
                types.Clear();
                foreach (pokemon poke in gen)
                {
                    if (!types.Contains(Convert.ToString(poke.types[0])))
                    {
                        types.Add(Convert.ToString(poke.types[0]));
                        Console.WriteLine("__________________");
                        Console.WriteLine($"ID : {poke.id} \nNom : {poke.name.fr}\nType : {Convert.ToString(poke.types[0])}\n");
                    }
                }
                i++;
            }
        }

        public static List<string> GenerateTypeList(List<List<pokemon>> genList) //Génération de la liste des types en fonction de tous les types présents dans le pokédex
        {
            List<string> types = new List<string>();
            foreach (List<pokemon> gen in genList)
            {
                foreach (pokemon poke in gen)
                {
                    if (!types.Contains(Convert.ToString(poke.types[0])))
                    {
                        types.Add(Convert.ToString(poke.types[0]));
                    }
                }
            }
            return types;
        }

        static public void setTypes(List<List<pokemon>> genList) //Setter de la liste de type afin de pouvoir l'instancier dans le programme principal
        {
            types = GenerateTypeList(genList);
        }
    }
}