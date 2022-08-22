using System;
using System.Collections.Generic;
using System.Text.Json;
using System.Threading;

namespace Pokedex
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Chargement des Pokémons...");

            //Instanciation des listes de pokemon pour chaque génération
            List<pokemon> gen1 = new List<pokemon>();
            List<pokemon> gen2 = new List<pokemon>();
            List<pokemon> gen3 = new List<pokemon>();
            List<pokemon> gen4 = new List<pokemon>();
            List<pokemon> gen5 = new List<pokemon>();
            List<pokemon> gen6 = new List<pokemon>();
            List<pokemon> gen7 = new List<pokemon>();
            List<pokemon> gen8 = new List<pokemon>();

            //Création des threads correspondant à chaque génération
            Thread threadGen1 = new Thread(() => GetPokemon(1, 151, gen1));
            Thread threadGen2 = new Thread(() => GetPokemon(152, 251, gen2));
            Thread threadGen3 = new Thread(() => GetPokemon(252, 386, gen3));
            Thread threadGen4 = new Thread(() => GetPokemon(387, 493, gen4));
            Thread threadGen5 = new Thread(() => GetPokemon(494, 649, gen5));
            Thread threadGen6 = new Thread(() => GetPokemon(650, 721, gen6));
            Thread threadGen7 = new Thread(() => GetPokemon(722, 802, gen7));
            Thread threadGen8 = new Thread(() => GetPokemon(803, 898, gen8));

            //Création de la liste des threads de génération afin de refactoriser le code
            List<Thread> threads = new List<Thread>() { threadGen1, threadGen2, threadGen3, threadGen4, threadGen5, threadGen6, threadGen7, threadGen8 };

            //Lancement de chaque thread
            foreach (Thread t in threads)
                t.Start();

            //Attente de tous les threads
            foreach (Thread t in threads)
                if (t.IsAlive)
                    t.Join();

            //Création du pokédex, avec les pokémons de chaque génération
            List<List<pokemon>> pokedex = new List<List<pokemon>>() { gen1, gen2, gen3, gen4, gen5, gen6, gen7, gen8 };

            //Instanciation de la liste de tous les types, qui est un attribut de la boîte à outils
            PokemonTools.setTypes(pokedex);


            do
            {
                Console.Clear();
                //Affichage du menu
                Console.Write("1 - Afficher la liste des Pokémons : numéro et nom" +
                    "\n\n2 - Afficher un Pokémon de chaque type pour chaque génération" +
                    "\n\n3 - Afficher tous les Pokémons d'un type au choix" +
                    "\n\n4 - Afficher tous les Pokémons de la génération 3" +
                    "\n\n5 - Afficher la moyenne de poids de tous les Pokémons d'un type au choix" +
                    "\n\n6 - Quitter l'application" +
                    "\n\n\nVotre choix : ");
                //Récupération du choix et renvoie vers chaque méthode pour chaque étape demandée
                string choice = Console.ReadLine();
                switch (choice)
                {
                    case "1":
                        Console.Clear();
                        PokemonTools.PrintAll(pokedex);
                        break;
                    case "2":
                        Console.Clear();
                        PokemonTools.PrintOneTypeByGen(pokedex);
                        break;
                    case "3":
                        Console.Clear();
                        PokemonTools.PrintByType(pokedex, PokemonTools.TypeChoice());
                        break;
                    case "4":
                        Console.Clear();
                        PokemonTools.PrintByGen(gen3);
                        break;
                    case "5":
                        Console.Clear();
                        PokemonTools.WeightByType(pokedex, PokemonTools.TypeChoice());
                        break;
                    case "6":
                        Console.Clear();
                        Console.WriteLine("Au revoir...");
                        return;
                    default:
                        Console.Clear();
                        Console.WriteLine("Valeur invalide saisie ! Veuillez recommencer");
                        break;
                }
                Console.ReadLine();
            } while (true);
        }

        private static void GetPokemon(int first, int last, List<pokemon> pokemons) //Récupération des informations de l'API
        {
            using (System.Net.WebClient web = new System.Net.WebClient())
            {
                for (int i = first; i <= last; i++)
                {
                    string jsonString = web.DownloadString($"https://tmare.ndelpech.fr/tps/pokemons/{i}");
                    pokemons.Add(JsonSerializer.Deserialize<pokemon>(jsonString)); //Sérialisation du JSON
                }
            }
        }
    }
}