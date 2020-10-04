#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Mon Sep 28 10:10:43 2020

@author: hoangph3
"""
import pandas as pd
lap = pd.read_csv('./data_linear.csv').values

x = lap[:,0]


print(x)